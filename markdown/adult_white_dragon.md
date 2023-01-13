---
statblock: true
name: 'Adult White Dragon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Dragon
cr: 16
ac: 18
hp: 250
hit_dice: '20d12 + 120'
speed: '40 ft., burrow 30 ft., fly 80 ft., swim 40 ft.'
stats:
    - 22
    - 12
    - 22
    - 8
    - 14
    - 14
damage_immunities: cold
saves:
    dexterity: 6
    constitution: 11
    wisdom: 7
    charisma: 7
skillsaves:
    intimidation: 7
    perception: 7
    stealth: 6
senses: 'blindsight 60 ft., darkvision 120 ft., passive Perception 20'
languages: 'Common, Draconic'
traits:
    0: { name: 'Cold Mastery', desc: "The dragon's movement and vision is not hindered by cold, icy surfaces, snow, wind, or storms. Additionally, the dragon can choose to burrow through snow and ice without leaving a trace." }
    1: { name: 'Legendary Resistance (3/Day)', desc: 'When the dragon fails a saving throw, it can choose to succeed instead. When it does, it sheds some of its scales, which turn to ice. If it has no more uses of this ability, its Armor Class is reduced to 16 until it finishes a long rest.' }
    2: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 15). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:dominate beast, fire shield, animal friendship, sleet storm']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws. In place of its bite attack, it can spit ice.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +11 to hit, reach 10 ft., one target. Hit: 22 (3d10 + 6) piercing damage plus 4 (1d8) cold damage.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +11 to hit, reach 5 ft., one target. Hit: 19 (3d8 + 6) slashing damage.' }
    - { name: Tail, desc: 'Melee Weapon Attack: +14 to hit, reach 15 ft., one target. Hit: 15 (2d8 + 6) bludgeoning damage, and the dragon pushes the target 10 feet away.' }
    - { name: 'Spit Ice', desc: 'The dragon targets a creature within 60 feet, forcing it to make a DC 19 Dexterity saving throw. On a failure, the target takes 16 (3d10) cold damage, and its speed is reduced to 0 until the end of its next turn. On a success, it takes half damage.' }
    - { name: 'Cold Breath (Recharge 56)', desc: 'The dragon exhales a 60-foot cone of frost. Each creature in the area makes a DC 19 Constitution saving throw. On a failure, it takes 52 (15d6) cold damage, and its speed is reduced to 0 until the end of its next turn. On a success, it takes half damage.' }
reactions:
    - { name: 'Tail Attack', desc: 'When a creature the dragon can see within 10 feet hits the dragon with a melee attack, the dragon makes a tail attack against it.' }
'legendary actions':
    - { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: Roar, desc: "Each creature of the dragon's choice within 120 feet that can hear it makes a DC 15 Charisma saving throw. On a failure, it is frightened for 1 minute. A creature repeats the saving throw at the end of its turn, ending the effect on itself on a success. When it succeeds on a saving throw or the effect ends for it, it is immune to Roar for 24 hours." }
    - { name: 'Wing Attack', desc: 'The dragon beats its wings. Each creature within 15 feet makes a DC 19 Dexterity saving throw. On a failure, it is pushed 10 feet away and knocked prone. The dragon can then fly up to half its fly speed.' }
    - { name: 'Raging Storm (1/Day, Bloodied Only)', desc: 'For 1 minute, gusts of sleet emanate from the dragon in a 40-foot-radius sphere, spreading around corners. The area is lightly obscured and the ground is difficult terrain The first time a creature moves on its turn while in the area, it must succeed on a DC 15 Dexterity saving throw or fall prone (or fall if it is flying).' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Adult White Dragon - A5E
```
