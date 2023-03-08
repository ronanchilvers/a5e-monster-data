---
statblock: true
name: 'Adult Amethyst Dragon'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Dragon
cr: 17
ac: 18
hp: 220
hit_dice: '21d12 + 84'
speed: '40 ft., burrow 30 ft., fly 60 ft.'
stats:
    - 18
    - 20
    - 18
    - 22
    - 14
    - 20
damage_resistances: 'force, psychic'
condition_immunities: fatigue
saves:
    - { constitution: 10 }
    - { intelligence: 12 }
    - { wisdom: 8 }
    - { charisma: 11 }
skillsaves:
    - { deception: 11 }
    - { insight: 8 }
    - { perception: 8 }
    - { persuasion: 11 }
senses: 'darkvision 120 ft., passive Perception 18'
languages: 'Common, Deep Speech, Draconic, Undercommon, telepathy 120 ft.'
traits:
    0: { name: 'Legendary Resistance (3/Day)', desc: "When the dragon fails a saving throw, it can choose to succeed instead. When it does, its scales dull briefly, and it can't use telepathy or psionic abilities until the end of its next turn." }
    1: { name: 'Psionic Powers', desc: "The dragon's psionic abilities are considered both magical and psionic." }
    2: { name: 'Far Thoughts', desc: 'The dragon is aware of any creature that uses a psionic ability or communicates telepathically within 100 miles of it. As an action, the dragon can psionically observe a creature, object, or location it is familiar with within 100 miles. While observing a subject in this way, the dragon can see, hear, and communicate telepathically, but it is blind and deaf in regard to its physical senses and does not require food or water. The dragon can psionically observe a subject indefinitely and can end this effect and return to its own senses as an action.' }
    3: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 19). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:calm emotions, charm person, mass suggestion, modify memory']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws. In place of its bite, it can use Psionic Wave.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +10 to hit, reach 10 ft., one target. Hit: 20 (3d10 + 4) piercing damage plus 4 (1d8) force damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +10 to hit, reach 5 ft., one target. Hit: 17 (3d8 + 4) slashing damage.' }
    - { name: 'Psionic Wave', desc: 'The dragon psionically emits a wave of crushing mental pressure. Each creature within 20 feet makes a DC 19 Wisdom saving throw, taking 16 (3d10) psychic damage on a failed save or half damage on a success. Creatures charmed by the dragon make this saving throw with disadvantage.' }
    - { name: 'Concussive Breath (Recharge 56)', desc: 'The dragon psionically unleashes telekinetic energy in a 60-foot cone. Each creature in that area makes a DC 18 Constitution saving throw, taking 60 (11d10) force damage on a failed save or half damage on a success.' }
reactions:
    - { name: 'Assume Control (While Bloodied)', desc: "When a creature charmed by the dragon begins its turn, the dragon telepathically commands the charmed creature until the end of the creature's turn. If the dragon commands the creature to take an action that would harm itself or an ally, the creature makes a DC 19 Wisdom saving throw. On a success, the creature's turn immediately ends." }
legendary_actions:
    - { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: Charm, desc: "The dragon targets a creature within 60 feet, forcing it to make a DC 16 Wisdom saving throw. On a failure, the creature is charmed by the dragon for 24 hours, regarding it as a trusted friend to be heeded and protected. Although it isn't under the dragon's control, it takes the dragon's requests or actions in the most favorable way it can. At the end of each of the target's turns and at the end of any turn during which the dragon or its companions harmed the target, it repeats the saving throw, ending the effect on a success." }
    - { name: Stupefy, desc: 'The dragon targets a creature within 60 feet. If the target is concentrating on a spell, it must make a DC 19 Constitution saving throw or lose concentration.' }
    - { name: 'Psionic Wave (Costs 2 Actions)', desc: 'The dragon uses Psionic Wave.' }
    - { name: 'Captivating Harmonics (1/Day)', desc: "Each creature of the dragon's choice within 90 feet makes a DC 16 Wisdom saving throw. On a failure, it becomes psionically charmed by the dragon for 1 minute. A creature repeats the saving throw at the end of each of its turns, ending the effect on itself on a success." }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Adult Amethyst Dragon
```
