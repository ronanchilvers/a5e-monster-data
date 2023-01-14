---
statblock: true
name: 'Spell-warped Chuul - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Aberration
cr: 7
ac: 16
hp: 127
hit_dice: '15d10 + 45'
speed: '30 ft., swim 40 ft.'
stats:
    - 18
    - 10
    - 16
    - 5
    - 16
    - 10
damage_immunities: poison
condition_immunities: 'frightened, poisoned'
senses: 'darkvision 60 ft., passive Perception 13'
languages: "understands Deep Speech but can't speak"
traits:
    - { name: Amphibious, desc: 'The chuul can breathe air and water.' }
    - { name: 'Detect Magic', desc: 'The chuul senses a magical aura around any visible creature or object within 120 feet that bears magic.' }
    - { name: Spell-warped, desc: 'The spell-warped Chuul possesses one of the following traits.' }
    - { name: 'Absorb Magic', desc: "The chuul has advantage on saving throws against spells and other magical effects. Whenever the chuul successfully saves against a spell or magical effect, it magically gains 5 (1d10) temporary hit points. While these temporary hit points last, the chuul's pincer attacks deal an additional 3 (1d6) force damage." }
    - { name: 'King-Sized Claw', desc: "One of the chuul's pincers deals 18 (4d6 + 4) bludgeoning damage on a successful hit. A creature grappled by this pincer makes ability checks to escape the grapple with disadvantage." }
    - { name: 'Rune Drinker', desc: "Whenever the chuul takes damage from a magic weapon, until the start of the chuul's next turn attacks made with that weapon have disadvantage, and the chuul gains a +4 bonus to AC." }
    - { name: 'Sparking Wand', desc: "A wand of lightning bolts adorns the chuul's carapace. A creature that starts its turn within 10 feet must make a successful DC 14 Dexterity saving throw or take 7 (2d6) lightning damage. As an action, a creature within 5 feet of the chuul can grab the wand by making a successful DC 14 Athletics or Sleight of Hand check. A creature that fails this check must make a DC 14 Dexterity saving throw. On a failed save, the creature takes 7 (2d6) lightning damage and is knocked prone. On a successful save, a creature takes half damage and isn't knocked prone." }
actions:
    - { name: Multiattack, desc: 'If the chuul is grappling a creature, it uses its tentacle on that creature. It then makes two pincer attacks.' }
    - { name: Pincer, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one Large or smaller target. Hit: 11 (2d6 + 4) bludgeoning damage. If the target is a creature, it is grappled (escape DC 15). When carrying a grappled creature, the chuul can move at full speed. A pincer that is being used to grapple a creature can be used only to attack that creature.' }
    - { name: Tentacle, desc: 'A grappled creature makes a DC 14 Constitution saving throw. On a failure, it is paralyzed for 1 minute. The creature repeats the saving throw at the end of each of its turns, ending the paralysis on a success.' }
combat:
    - { name: 'The chuul seeks out magical treasure', desc: 'It uses its Detect Magic ability to choose the target with the most visible magic items. The chuul tries to grapple that creature and then paralyze it on the next turn. Once the chuul has at least one creature seized, it retreats, trying to carry its victim to its master.' }

---
```statblock
monster: Spell-warped Chuul - A5E
```
