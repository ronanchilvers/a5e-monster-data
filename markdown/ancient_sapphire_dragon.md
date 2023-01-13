---
statblock: true
name: 'Ancient Sapphire Dragon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Gargantuan
type: Dragon
cr: 25
ac: 21
hp: 429
hit_dice: '26d20 + 156'
speed: '40 ft., burrow 40 ft., fly 80 ft.'
stats:
    - 24
    - 24
    - 22
    - 26
    - 24
    - 20
damage_immunities: psychic
condition_immunities: fatigue
saves:
    - { constitution: 13 }
    - { intelligence: 15 }
    - { wisdom: 14 }
    - { charisma: 12 }
skillsaves:
    - { arcana: 15 }
    - { deception: 12 }
    - { history: 15 }
    - { insight: 14 }
    - { perception: 14 }
    - { persuasion: 12 }
senses: 'darkvision 120 ft., passive Perception 27'
languages: 'Common, Deep Speech, Draconic, Undercommon, telepathy 120 ft.'
traits:
    0: { name: 'Legendary Resistance (3/Day)', desc: "When the dragon fails a saving throw, it can choose to succeed instead. When it does, its eyes dull as it briefly loses its connection to the future. Until the end of its next turn, it can't use Foretell, Prognosticate, or Prophesy Doom, and it loses its Predictive Harmonics trait." }
    1: { name: 'Predictive Harmonics', desc: 'The dragon is psionically aware of its own immediate future. The dragon cannot be surprised, and any time the dragon would make a roll with disadvantage, it makes that roll normally instead.' }
    2: { name: 'Psionic Powers', desc: "The dragon's psionic abilities are considered both magical and psionic." }
    3: { name: 'Far Thoughts', desc: 'The dragon is aware of any creature that uses a psionic ability or communicates telepathically within 100 miles of it. As an action, the dragon can psionically observe a creature, object, or location it is familiar with within 100 miles. While observing a subject in this way, the dragon can see, hear, and communicate telepathically, but it is blind and deaf in regard to its physical senses and does not require food or water. The dragon can psionically observe a subject indefinitely and can end this effect and return to its own senses as an action.' }
    4: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 20). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:comprehend languages, detect thoughts, telekinesis, wall of force', ' 1/day:etherealness, mind blank']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws. In place of its bite, it can use Psionic Wave.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +14 to hit, reach 15 ft., one target. Hit: 29 (4d10 + 7) piercing damage plus 9 (2d8) psychic damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +14 to hit, reach 10 ft., one target. Hit: 20 (3d8 + 7) slashing damage.' }
    - { name: 'Psionic Wave', desc: 'The dragon psionically emits a wave of crushing mental pressure. Each creature within 20 feet makes a DC 21 Wisdom saving throw, taking 22 (4d10) psychic damage on a failed save or half damage on a success. Creatures suffering ongoing psychic damage make this saving throw with disadvantage.' }
    - { name: 'Discognitive Breath (Recharge 56)', desc: 'The dragon unleashes psychic energy in a 90-foot cone. Each creature in that area makes a DC 21 Intelligence saving throw, taking 66 (12d10) psychic damage and 22 (4d10) ongoing psychic damage on a failed save or half damage and no ongoing psychic damage on a success. The ongoing damage ends if a creature falls unconscious. A creature can use an action to ground itself in reality, ending the ongoing damage.' }
    - { name: 'Prognosticate (3/Day)', desc: 'The dragon psionically makes a prediction of an event up to 300 years in the future. This prediction has a 75 percent chance of being perfectly accurate and a 25 percent chance of being partially or wholly wrong. Alternatively, the dragon can choose to gain truesight to a range of 120 feet for 1 minute.' }
reactions:
    - { name: 'Prophesy Doom (When Bloodied)', desc: "When a language-using creature suffering ongoing psychic damage targets the dragon with an attack or spell, the dragon telepathically prophesies the attacker's doom. The attacker makes a DC 20 Intelligence saving throw. On a failure, the target magically gains the doomed condition. It is aware that it will die due to some bizarre circumstance within 13 (2d12) hours. In addition to the normal means of removing the condition, this doom can be avoided by a spell that can predict the future, such as augury, contact other plane, or foresight. The dragon can end the effect as an action." }
legendary_actions:
    - { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: Foretell, desc: "The dragon psionically catches a glimpse of a fast-approaching moment and plans accordingly. The dragon rolls a d20 and records the number rolled. Until the end of the dragon's next turn, the dragon can replace the result of any d20 rolled by it or a creature within 120 feet with the foretold number. Each foretold roll can be used only once." }
    - { name: 'Psionic Wave (Costs 2 Actions)', desc: 'The dragon uses Psionic Wave.' }
    - { name: 'Shatter Mind (Costs 2 Actions)', desc: 'The dragon targets a creature within 60 feet, forcing it to make a DC 23 Intelligence saving throw. On a failure, the target takes 22 (4d10) ongoing psychic damage. An affected creature repeats the saving throw at the end of each of its turns, ending the ongoing psychic damage on a success. A creature can also use an action to ground itself in reality, ending the ongoing damage.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Ancient Sapphire Dragon - A5E
```
